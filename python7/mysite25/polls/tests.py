from django.test import TestCase

# Create your tests here.
from django.urls import reverse
from django.utils import timezone
from django.views import generic
from django.views.generic import DetailView

from .models import Question
def create_question(question_text, days):
    """
    Create a question with the given `question_text` and published the
    given number of `days` offset to now (negative for questions published
    in the past, positive for questions that have yet to be published).
    """
    time = timezone.now() + timezone.timedelta(days=days)
    return Question.objects.create(question_text=question_text, pub_date=time)

class ResultsViewTests(TestCase):
    def test_results_view_with_a_future_question(self):
        """
        The results view of a question with a pub_date in the future returns a 404 not found.
        """
        future_question = create_question(question_text="Future question.", days=5)
        url = reverse('polls:results', args=(future_question.id,))
        response = self.client.get(url)
        self.assertEqual(response.status_code, 404)

    def test_results_view_with_a_past_question(self):
        """
        The results view of a question with a pub_date in the past displays the question's text.
        """
        past_question = create_question(question_text="Past Question.", days=-5)
        url = reverse('polls:results', args=(past_question.id,))
        response = self.client.get(url)
        self.assertContains(response, past_question.question_text)

class ResultsView(generic.DetailView):
    model = Question
    template_name = 'polls/results.html'

    def get_queryset(self):
        """Return the last five published questions."""
        return Question.objects.filter(pub_date__lte=timezone.now())

    def get(self, request, *args, **kwargs):
        self.object = self.get_object()
        if self.object.pub_date > timezone.now():
            return HttpResponseNotFound('<h1>Page not found</h1>')
        context = self.get_context_data(object=self.object)
        return self.render_to_response(context)

#include <stdio.h>
#define sqr(x) (x * x)

int main(void)
{
    int n;
    double x;
    printf("Please enter an integer:");
    scanf("%d", &n);

    printf("Please enter a real number:");
    scanf("%lf", &x);

    printf("The squar of the integer you enter is %d\n", sqr(n));
    printf("The squar of the real number you enter is %f\n", sqr(x));

   return 0;
    }

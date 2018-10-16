#include <stdio.h>

void swap(int *px, int *py)
{
    int temp;
    temp = *px;
    *px = *py;
    *py = temp;
    }

void sort3(int *x, int *y, int *z)
{
    if (*x < *y)
        swap(x, y);

    if (*x < *z)
        swap(x, z);

    if (*y < *z)
        swap(z, y);


    }
int main(void)
{
    int a, b, c;

    puts("Enter 3 intiger number");
    scanf("%d%d%d", &a, &b, &c);

    sort3(&a, &b, &c);

    puts("Sorting 3 integer to upper order");
    printf("a:%d b:%d c:%d\n", a, b, c);

    return 0;
    }

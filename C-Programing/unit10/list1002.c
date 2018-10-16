#include <stdio.h>

int main(void)
{
    int i, n;
    double x;
    int a[3];

    printf("The address of integer n : %p\n", &n);
    printf("The address of real number x : %p\n", &x);

    for (i = 0; i < 3; i++){
        printf("The address of integer i : %p\n", &i);
        printf("The address of integer list a[%d] : %p\n", i, &a[i]);
        }

    return 0;
    }

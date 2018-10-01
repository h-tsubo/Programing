#include<stdio.h>

int main(void)
{
    int a, b;
    scanf("%d%d", &a, &b);
    printf("%f\n%f\n", (a + b) / 2.0, (double)(a + b) / 2);
    return 0;
    }

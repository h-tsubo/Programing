#include <stdio.h>
int factorial(int n)
{
    if (n > 0)
        return n * factorial(n - 1);
    else
        return 1;
    }

int main(void)
{
    int n;
    puts("Please enter an integer");
    scanf("%d", &n);

    printf("The factorial of n is %d\n", factorial(n));

    return 0;
    }

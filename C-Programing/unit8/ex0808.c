#include <stdio.h>
int gcd(int x, int y)
{
    if (x % y == 0)
        return y;
    else
        return gcd(y, x % y);
    }

int main(void)
{
    int x, y;
    puts("Please enter two integers");
    printf("x:");
    scanf("%d", &x);

    printf("y:");
    scanf("%d", &y);

    printf("The gcd of x and y is %d\n", gcd(x, y));

    return 0;
    }

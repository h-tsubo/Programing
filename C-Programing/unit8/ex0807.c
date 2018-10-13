#include <stdio.h>
int comb(int n, int r)
{
    if (n == r)
        return 1;
    else if (r == 0)
        return 1;
    else if (r == 1)
        return n;
    else
        return comb(n - 1, r - 1) + comb(n - 1, r);
    }

int main(void)
{
    int n, r;
    puts("Please enter two integers");
    printf("n:");
    scanf("%d", &n);

    printf("r:");
    scanf("%d", &r);

    printf("The combination of n and r is %d\n", comb(n, r));

    return 0;
    }

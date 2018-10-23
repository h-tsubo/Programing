#include <stdio.h>

int main(void)
{
    int n, m;
    scanf("%d%d", &n, &m);
    if (n % m)
        puts("m is not divisor of n");
    else
        printf("%d is divisor of %d\n", m, n );
    return 0;
    }

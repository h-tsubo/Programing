# include <stdio.h>

int main(void)
{
    int a, b, x;
    scanf("%d%d", &a, &b);
    x = a > b ? a - b : b - a;
    printf("%d\n", x);
    return 0;
    }

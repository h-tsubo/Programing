#include <stdio.h>

int main(void)
{
    int a, b, c, min;
    scanf("%d%d%d", &a, &b, &c);
    min = a;
    if (min > b)
        min = b;
    if (min > c)
        min = c;
    printf("%d\n", min);
    return 0;
    }

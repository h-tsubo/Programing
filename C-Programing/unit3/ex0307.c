#include <stdio.h>

int main(void)
{
    int a, b, c, d, max;
    scanf("%d%d%d%d", &a, &b, &c, &d);
    max = a;
    if (max < b)
        max = b;
    if (max < c)
        max = c;
    if (max < d)
        max = d;
    printf("max = %d\n", max);
    return 0;
    }

#include <stdio.h>

int main(void)
{
    int a, b;
    scanf("%d%d", &a, &b);
    if (a > b)
        puts("a is larger than b");
    else if ( a == b)
        puts("a is equal to b");
    else
        puts("a is less than b");
    return 0;
    }

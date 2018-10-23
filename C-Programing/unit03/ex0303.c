#include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);
    if (n < 0)
        printf("%d\n", -n);
    else
        printf("%d\n", n);
    return 0;
    }

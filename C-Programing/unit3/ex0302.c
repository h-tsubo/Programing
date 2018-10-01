#include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);
    if (n == 0)
        puts("n is 0");
    else if (n < 0)
        puts("n is a negative num.");
    else
        puts("n is a positive num.");
    return 0;
    }

#include <stdio.h>

int main(void)
{
    int retry;
    do {
        int n;
        scanf ("%d", &n);
        if (n == 0)
            puts("The number is zero");
        else if (n > 0)
            puts ("The number is positive");
        else
            puts ("The number is negative");
        puts("Retry? Yes:0/No:9");
        scanf("%d", &retry);
        } while (retry == 0);

     return 0;
    }

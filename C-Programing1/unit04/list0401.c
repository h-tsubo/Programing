#include <stdio.h>

int main(void)
{
    int retry;

    do{
        int n;
        puts("enter a number");
        scanf("%d", &n);
        if (n % 2)
            puts("odd");
        else
            puts("even");
        puts("retry?[Yes:1/No:2]");
        scanf("%d", &retry);
       } while (retry == 1);

    return 0;
    }

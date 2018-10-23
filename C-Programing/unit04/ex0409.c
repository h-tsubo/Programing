#include <stdio.h>

int main(void)
{
    int i = 0;
    int n;
    scanf("%d", &n);
    while(i++ < n){
        if (i % 2)
            puts("+");
        else
            puts("-");
        }

    return 0;
    }

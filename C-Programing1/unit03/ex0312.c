#include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);
    switch (n % 2){
        case (0) : puts("even"); break;
        case (1) : puts("odd"); break;
        }

    return 0;
    }

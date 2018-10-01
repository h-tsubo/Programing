#include <stdio.h>

int main(void)
{
    int n;

    scanf("%d", &n);
    switch (n % 3){
        case 0 : puts ("can be divided by 3"); break;
        case 1 : puts ("can't be divided by 3 and the remeinder is 1"); break;
        case 2 : puts ("can't be divided by 3 and the remeinder is 2"); break;
        }

    return 0;
    }

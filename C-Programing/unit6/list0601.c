#include <stdio.h>

int max(int a, int b)
{
    if (a > b)
        return a;
    else
        return b;
    }

int main(void)
{
    int na, nb;
    scanf("%d%d", &na, &nb);
    
    printf("max:%d\n", max (na, nb));
    
    return 0;
    }

#include <stdio.h>

int pwd(int x, int n)
{
    int p = 1;
    while (n-- > 0)
        p *= x;
    
    return p;
    }


int main(void){
    int x, n;
    scanf("%d%d", &x, &n);

    printf("%d\n", pwd(x, n));
    
    return 0;
    }

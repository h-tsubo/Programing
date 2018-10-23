#include <stdio.h>

int max3(int a, int b, int c)
{
    int max = a;
    if (max < b) max = b;
    if (max < c) max = c;

    return max;
    }

int main(void)
{
    int na, nb, nc;
    scanf("%d%d%d", &na, &nb, &nc);
    
    printf("max:%d\n", max3(na, nb, nc));
    
    return 0;
    }

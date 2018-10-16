#include <stdio.h>

void sum_diff(int x, int y, int *sum, int *diff)
{
    *sum = x + y;
    
    *diff = (x > y) ? x - y : y - x;
    }

int main(void)
{
    int a, b;
    int wa = 0, sa = 0;

    puts("Enter integer a and b");
    scanf("%d%d", &a, &b);

    sum_diff(a, b, &wa, &sa);

    printf("wa = %d sa = %d\n", wa, sa);

    return 0;
    }

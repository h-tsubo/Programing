#include <stdio.h>

void square(int *x)
{
    *x = *x * *x;
    }

int main(void)
{
    int a = 3;
    int b = 4;
    
    printf("a = %d; b = %d\n", a, b);
    
    square(&a); 
    printf("a = %d; b = %d\n", a, b);

    return 0;
    }

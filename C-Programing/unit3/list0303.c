#include <stdio.h>

int main(void)
{
    int n;
    scanf("%d", &n);
    if (n % 2)
        puts("odd");
    else
        puts("even");
    return 0;
}

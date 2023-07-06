#include <stdio.h>

int main(void)
{
    int a, b, c;
    scanf("%d%d%d", &a, &b, &c);
    if (a == b && b == c)
        puts("These three numbers are all equivalent");
    else if (a == b || b == c || c == a)
        puts("Two of these three numbers are equivalent");
    else
        puts("None of these three numbers are equivalent");

    return 0;
    }

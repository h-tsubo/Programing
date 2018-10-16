#include <stdio.h>

int main(void)
{
    int a = 1;
    int b = 2;
    int c = 3;

    int *p, *q;

    p = &a;
    q = &b;

    printf("a : %d b : %d c : %d\n", a, b, c);
    printf("*p : %d *q : %d\n", *p, *q);

    *p = 4;
    *q = 5;

    puts("*p and *q has been changed");

    printf("a : %d b : %d c : %d\n", a, b, c);
    printf("*p : %d *q : %d\n", *p, *q);


    return 0;
    }

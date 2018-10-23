#include <stdio.h>

int main(void)
{
    int i = 0;
    char a[][5] = {"ABC", "D", "EFGH"};
    char *p[] = {"IJ", "KLM", "NOPQ"};

    while (a[i]){
        printf("a[%d] = %s\n", i, a[i]);
        i++;
        }

    i = 0;

    while (p[i]){
        printf("p[%d] = %s\n", i, p[i]);
        i++;
        }

    return 0;
    }

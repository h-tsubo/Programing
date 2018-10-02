#include <stdio.h>

int min_of(const int v[], int n){
    int i;
    int min = v[0];

    for (i = 0; i < n; i++)
        if (min > v[i]) min = v[i];

    return min;
    }

int main(void){
    int a[5];
    int i;
    int min_a;

    for (i = 0; i < 5; i++)
        scanf("%d", &a[i]);

    min_a = min_of(a, 5);
    printf("%d\n", min_a);


    return 0;
    }

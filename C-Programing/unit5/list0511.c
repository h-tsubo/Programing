#include <stdio.h>
#define NUMBER 5
int main(void){
    int a[NUMBER];
    int i, max, min;

    for (i = 0; i < NUMBER; i++ )
        scanf("%d", &a[i]);

    max = min = a[0];
    for (i = 0; i < NUMBER; i++ ){
        if (max < a[i]) max = a[i];
        if (min > a[i]) min = a[i];
        }
    printf("max:%d\nmin:%d\n", max, min);
    return 0;
    }

#include <stdio.h>
#define NUMBER 5

void rev_intarray(int v[], int n){
    int i;
    int temp;

    for (i = 0; i < n/2; i++){
        temp = v[i];
        v[i] = v[n - i - 1];
        v[n - i - 1] = temp;
        }
    }

int main(void){
    int a[NUMBER];
    int i;

    for (i = 0; i < NUMBER; i++)
        scanf("%d", &a[i]);

    puts("Flipping the array.");

    rev_intarray(a, NUMBER);

    for (i = 0; i < NUMBER; i++)
        printf("%d\n", a[i]);


    return 0;
    }

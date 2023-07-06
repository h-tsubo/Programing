#include <stdio.h>
#define NUMBER 5

void bsort(int a[], int n)
{
    int i, j;

    for (i = 0; i < n; i++)
        for (j = 0; j < n - i; j++){
            if (a[j] > a[j + 1]){
                int temp = a[j];
                a[j] = a[j + 1];
                a[j + 1] = temp;
                }
            }
    }

int main(void)
{
    int i;
    int x[NUMBER];

    printf("Please enter %d numbers\n", NUMBER);

    for (i = 0; i < NUMBER; i++){
        printf("%d:", i + 1);
        scanf("%d", &x[i]);
        }

    bsort(x, NUMBER);

    puts("Storting the numbers");

    for (i = 0; i < NUMBER; i++){
        printf("%d:%d\n", i + 1, x[i]);
        }
    return 0;
    }

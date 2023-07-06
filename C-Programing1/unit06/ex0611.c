#include <stdio.h>
#define NUMBER 5
#define FAILED -1

int search(const int v[], int idx[], int key, int n)
{
    int i, j;
    j = 0;

    for(i = 0; i < n; i++)
        if (v[i] == key){
        idx[j] = i;
        j++;
        }
    return (j == 0) ? FAILED : j;
    }

int main(void){
    int a[NUMBER];
    int i, ky, x;
    int idx[100];

    for (i = 0; i < NUMBER; i++){
        printf("a[%d]:", i);
        scanf("%d", &a[i]);
        }

    printf("The value you search:");
    scanf("%d", &ky);

    x = search(a, idx, ky, NUMBER);

    if (x == FAILED)
        puts("Search failed");
    else
        for(i = 0; i < x; i++ )
            printf("idx[%d] = %d\n", i, idx[i]);
    
    return 0;
    }

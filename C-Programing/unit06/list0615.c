#include <stdio.h>
#define NUMBER 5
#define FAILED -1

int search(int v[], int key, int n)
{
    int i;
    v[n] = key;

    for(i = 0; v[i] != key; i++)
        ;
    return (i < n) ? i : FAILED;
    }

int main(void){
    int a[NUMBER + 1];
    int i, ky, idx;

    for (i = 0; i < NUMBER; i++){
        printf("a[%d]:", i);
        scanf("%d", &a[i]);
        }

    printf("The value you search:");
    scanf("%d", &ky);

    idx = search(a, ky, NUMBER);

    if (idx == FAILED)
        puts("Search failed");
    else
        printf("The value %d is in number %d\n", ky, idx + 1 );
    
    return 0;
    }

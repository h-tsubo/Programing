#include <stdio.h>

#define NUMBER 5

int max_array(int v[], int n)
{
    int i;
    int max = v[0];

    for (i = 0; i < n; i++)
        if (max < v[i]) max = v[i];

    return max;
    }

int main(void){
    int i;
    int eng[NUMBER], mat[NUMBER];
    int max_e, max_m;

    for (i = 0; i < NUMBER; i++){
        printf("[%d]English: ", i + 1); scanf("%d", &eng[i]);
        printf("    Math   :"); scanf("%d", &mat[i]);
        }

    max_e = max_array(eng, NUMBER );
    max_m = max_array(mat, NUMBER );
    
    printf("Maximum of English scores:%d\nMaximum of Math scores:%d\n", max_e, max_m);

    
    return 0;
    }

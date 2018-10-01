#include <stdio.h>

int main(void){
    int i, j;
    int a[4][3] = { {23,12,43}, {32,41,3}, {34,2,45}, {34,23,4}};
    int b[4][3] = { {54,43,2}, {3,54,15}, {10,55,4}, {38,10,44}};
    int sum[4][3];
    
    for (i = 0; i < 4; i++){
        for(j = 0; j < 3; j++){
            sum[i][j] = a[i][j] + b[i][j];
            }
        }
    
    for (i = 0; i < 4; i++){
        for(j = 0; j < 3; j++){
            printf("%3d", a[i][j]);
            }
        puts("\n");
        }
        puts("------------------");
    for (i = 0; i < 4; i++){
        for(j = 0; j < 3; j++){
            printf("%3d", b[i][j]);
            }
        puts("\n");
        }
        puts("------------------");
    for (i = 0; i < 4; i++){
       for(j = 0; j < 3; j++){
           printf("%3d", sum[i][j]);
           }
        puts("\n");
        }

    return 0;
    }

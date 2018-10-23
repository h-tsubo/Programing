#include <stdio.h>
#define NUMBER 9

int main(void){
   int a[NUMBER], b[NUMBER];
   int i;
   
   for (i = 0; i < NUMBER; i++)
       scanf("%d", &a[i]); 
   for (i = 0; i < NUMBER; i++) 
       b[i] = a[NUMBER - 1 - i];
        
   for (i = 0; i < NUMBER; i++){
       printf("a[%d]=%d\n", i, a[i]);
   }
   puts("\n");
   for (i = 0; i < NUMBER; i++){
       printf("b[%d]=%d\n", i, b[i]);
   }
    return 0;
    }

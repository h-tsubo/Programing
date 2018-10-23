#include <stdio.h>

int main(void){
   int a[5], b[5];
   int i;
   
   for (i = 0; i < 5; i++) 
       a[i] = i + 1;
   for (i = 0; i < 5; i++) 
       b[i] = a[4 - i];
        
   for (i = 0; i < 5; i++){
       printf("a[%d]=%d\n", i, a[i]);
   }
   puts("\n");
   for (i = 0; i < 5; i++){
       printf("b[%d]=%d\n", i, b[i]);
   }
    return 0;
    }

#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <string.h>
#include <windows.h>

struct queue{
	int noantrian;
	int nomeja;
	char namapesanan[10][20];
	int jumlah[10];
	int count;
	int circularcount;
	int mejameja;
    struct queue *next;
    struct queue *prev;
    struct queue *front;
    struct queue *rear;
    struct queue *circularhead;
    struct queue *nextll;
    struct queue *prevll;
    struct queue *headtemp;

};
typedef struct queue queue;

//===============================================

queue createQueue(void);
int enqueue (queue *Queue);
void dequeue (queue *Queue,int count[100]);
//void destroy (queue *Queue);
void viewData (queue *Queue,int count[100]);
//void total (int jum);

//===============================================

int main()
{
	char pilih;
	int jum=0;
	int count[100];
	int t;
  queue Queue;
  Queue = createQueue();
  t=0;
  count[0] = 0;

   do {
   		system("cls");

   		printf("================================\n");
    	printf("----- MENU ANTRIAN RESTORAN ----\n");
    	printf("================================\n");

    	printf("\n1. INPUT ANTRIAN ");
    	printf("\n2. VIEW ANTRIAN ");
    	printf("\n3. KELUAR ANTRIAN ");
    	printf("\n4. JUMLAH PEMASUKAN ");
    	printf("\n5. EXIT ");

    	printf("\n\nMASUKKAN PILIHAN (tekan q untuk keluar) : ");
    	scanf("%c",&pilih);

    	if (pilih == '1'){
     		count[t] = enqueue(&Queue);
     		t++;
	 		}
	 	else if (pilih == '2'){

     		viewData(&Queue,count);
	 		}
     	else if (pilih == '3'){
     		dequeue (&Queue,count);
	 		}
     /*	else if (pilih == '4'){
     		display (&Queue);
     		}
		else if (pilih == '5'){
			showtheFront (&Queue);
			}
		else if (pilih == '6'){
			showtheRear (&Queue);
			}
		else if (pilih == '7'){
			total (jum);
			}
		else if (pilih == '8'){
			destroy (&Queue);
			}*/
     }
	while (pilih != 'q');
    return 0;
}

//==========================================

queue createQueue(void)
{
 queue Queue;

 Queue.count=0;
 Queue.circularcount=0;
 Queue.mejameja=0;
 Queue.front=NULL;
 Queue.rear=NULL;
 Queue.circularhead=NULL;
 return(Queue);
}

//==========================================

int enqueue(queue *Queue)
{
 char tombol;
 char pilih;
 char namapesanan[10][20];
 int jumlah[10];
 int a=0;

		queue *menu;
		queue *pesan;

		system ("cls");

	 	printf("===================================\n");
	 	printf("------- MASUKKAN DATA ANTRIAN -------\n");
	 	printf("===================================\n\n");


	 		pilih = 'y';
	 		menu = (queue *)malloc(sizeof(queue));
	 		printf("Masukkan Nomor Antrian\t : ");
			scanf("%i",&(menu->noantrian));
 			printf("Masukkan Nomor Meja\t : ");
 			scanf("%i",&(menu->nomeja));
			printf("----- Input Pesanan -----");
			while (pilih != 'n')
			{

			printf("\n- Masukkan pesanan anda\t : ");
			scanf("%s",&menu->namapesanan[a]);
			printf("- Masukkan jumlah pesanan : ");
			scanf("%i",&menu->jumlah[a]);
			a++;
			fflush(stdin);
			if(a==10)
			{
				printf("pesanan anda penuh");
				break;
			}
			pesan_wrong:
			printf("Tambah Pesanan ? y/n : ");
			scanf("%c",&pilih);
			if (pilih != 'y' && pilih != 'n'){
				printf("Pilihan salah!");
				getch();
				goto pesan_wrong;
			}
		}
  			if(Queue->front==NULL)
   			 {
				menu->next=NULL;
				menu->prev=NULL;
      			Queue->front=menu;
      			Queue->rear=menu;
      			getch();
      		 }
   			else
   			 {
       			Queue->rear->next=menu;
       			menu->prev=Queue->rear;
      	 }

   			Queue->rear=menu;
   			Queue->count++;

		return a;
}

void dequeue(queue *Queue,int count[100])
{
	queue *temp;
	int t;

	temp = Queue->front;//meletakkan pointer temp ke head dari queue
	Queue->front = Queue->front->next;//memindahkan head dari queue agar tidak ikut tergeser ke meja


	temp->next = NULL;//memutuskan queue terdepan untuk dimasukkan ke meja/circular

	if (Queue->circularcount % 5 == 0 && Queue->circularcount != 0)
	{
		Queue->headtemp->nextll = temp;
		Queue->headtemp = temp;
		Queue->headtemp = NULL;
		temp->next = Queue->headtemp;
		Queue->mejameja++;
	}

	else if (Queue->circularcount == 0)
	{
		Queue->circularhead = temp;//memberi head pada circular
		Queue->circularhead->next = temp;
		Queue->headtemp = Queue->circularhead;
		Queue->circularcount++;
		Queue->count--;
		Queue->mejameja++;
	}
	else
	{
		temp->next = Queue->headtemp->next;
		Queue->headtemp->next = temp;
		Queue->circularcount++;
		Queue->count--;
	}



	getch();


}

void viewData(queue *Queue,int count[100]){
	queue *temp = Queue->front;
	queue *temp1;
	int t=0;

     		system ("cls");
			printf("-------------------------------------\n");
			printf("------------ DATA MOBIL -------------\n");
			printf("-------------------------------------\n\n");

			if (temp == NULL){
				printf("\t>>> Tidak Ada Antrian <<<");
			}
			else
			{
				while(temp)
	  			{
	  				printf("\n");
			  		printf("NO ANTRIAN\t :  %i\n",temp->noantrian);
		 			printf("NO MEJA\t\t :  %i\n",temp->nomeja);
                    int c;
		 			for (c=0;c<=count[t+(Queue->circularcount)];c++)
					{
		 				printf("- NAMA PESANAN\t :  %s\n",temp->namapesanan[c]);
		 				printf("- JUMLAH\t :  %i\n",temp->jumlah[c]);
		 			}
					t++;
					temp = temp->next;
				}
			}
	temp1 = Queue->circularhead;
	int circcount=Queue->circularcount;
	int circplc=count[0];

			if (temp1 == NULL){
				printf("\t>>> Tidak Ada Antrian <<<");
			}
			else
			{ t=0;
            int b;
            int a;
			for (b=1;b<=Queue->mejameja;b++)
			{
				for(a=0; a<Queue->circularcount; a++)
	  			{
	  				printf("\n");
			  		printf("NO ANTRIAN\t :  %i\n",temp1->noantrian);
		 			printf("NO MEJA\t\t :  %i\n",temp1->nomeja);

					if (a%5!=0)
					{
						circplc = count[circcount-1];
					}
                    int c;
		 			for (c=0;c<=circplc;c++)
					{
		 				printf("- NAMA PESANAN\t :  %s\n",temp1->namapesanan[c]);
		 				printf("- JUMLAH\t :  %i\n",temp1->jumlah[c]);
		 			}

		 			if (a%5!=0)
					{
						circcount--;
					}
					t++;
					temp1 = temp1->next;
				}
				temp1 = temp1->nextll;
			}
		}

			getch();
}

/*
void showtheFront (queue *Queue){
		queue *depan;
	depan = Queue->front;

	system ("cls");
	printf("----- MOBIL TERDEPAN -----\n");
	printf("NO ANTRIAN\t :  %s\n",depan->noantrian);
	printf("NO PLAT\t\t :  %s\n",depan->platmobil);
	printf("TIPE MOBIL\t :  %s\n",depan->tipemobil);
	printf("MERK MOBIL\t :  %s\n\n\n",depan->merkmobil);
	getch();
}

void showtheRear (queue *Queue){
	queue *akhir;
	akhir = Queue->rear;

	system ("cls");
	printf("----- MOBIL TERAKHIR -----\n");
	printf("NO ANTRIAN\t :  %s\n",akhir->noantrian);
	printf("NO PLAT\t\t :  %s\n",akhir->platmobil);
	printf("TIPE MOBIL\t :  %s\n",akhir->tipemobil);
	printf("MERK MOBIL\t :  %s\n\n\n",akhir->merkmobil);
	getch();
}

void total (int jum){

	system ("cls");
	printf("  ----------------------------------------------");
	printf("\n |\t\t ~ PEMBUKUAN ~ \t\t\t|");
	printf("\n  ==============================================");
	printf("\n | Tarif Per Mobil\t : Rp. 30000.00-\t|");
	printf("\n | \t\t\t\t\t\t|");
	printf("\n | Mobil Selesai Dicuci\t : %i \t\t\t|",jum);
	printf("\n | \t\t\t\t\t\t|");
	printf("\n | Jumlah Pemasukan\t : Rp. %.2f-\t|",float(jum*30000));
	printf("\n  ----------------------------------------------");
	getch();
}
*/

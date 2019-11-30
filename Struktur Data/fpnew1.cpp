#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <string.h>
#include <windows.h>

struct queue{
	int noantrian;
	int nomeja;
	char namapesanan[10][20];
	char namapemesan[10][30];
	int jumlah[10];
	int count;
	int circularcount;
	int noantri;
	int mejameja;
	int penghasilan;
    struct queue *next;
    struct queue *prev;
    struct queue *front;
    struct queue *rear;
    struct queue *circularhead;
    struct queue *nextll;
    struct queue *headtemp;
    
};
typedef struct queue queue;

//===============================================

queue createQueue(void);
int enqueue (queue *Queue);
void dequeue (queue *Queue);
void viewData (queue *Queue,int count[100]);
void total (queue *Queue);

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
    	printf("------- MENU ANTRIAN DEPOT -----\n");
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
     		
     		getch();
	 		}
	 	else if (pilih == '2'){
	 		
     		viewData(&Queue,count);
	 		}
     	else if (pilih == '3'){
     		dequeue (&Queue);
	 		}
     	else if (pilih == '4'){
     		total (&Queue);
			}
	}
	while (pilih != 'q');
}

//==========================================

queue createQueue(void)
{
 queue Queue;

 Queue.count=0;
 Queue.circularcount=0;
 Queue.mejameja=0;
 Queue.penghasilan=0;
 Queue.noantrian=0;
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
			Queue->noantrian++;
			menu->noantri = Queue->noantrian;
			printf("Masukkan Nomor Antrian\t : %i\n",menu->noantri);
 			printf("Masukkan Nomor Meja\t : ");
 			scanf("%i",&(menu->nomeja));
			printf("Masukkan Nama Pemesan\t : ");
			scanf(" %[^\n]s",&(menu->namapemesan));	
 			printf("\n -------------------------------- \n");
			printf("|           DAFTAR MENU           |\n");
			printf("|--------------------------------|\n");
			printf("| NO |   NAMA MENU     |  Harga  |\n");
			printf(" -------------------------------- \n");
			printf("| 1  | Nasi Goreng     | 12.000  |\n");
			printf("| 2  | Mie Goreng      |  8.000  |\n");
			printf("| 3  | Gado-Gado       | 10.000  |\n");
			printf("| 4  | Es Teh          |  5.000  |\n");
			printf("| 5  | Kopi            |  7.000  |\n");
			printf(" -------------------------------- \n");
	
			printf(" -------- Input Pesanan --------- \n");
			while (pilih != 'n')
			{
			pesan :
			printf("\n- Masukkan pesanan anda\t : ");
			scanf(" %[^\n]s",&menu->namapesanan[a]);
			printf("- Masukkan jumlah pesanan : ");
			scanf("%i",&menu->jumlah[a]);
			if (strcmp(menu->namapesanan[a],"Nasi Goreng")==0)
			{
				Queue->penghasilan = Queue->penghasilan + 12000*menu->jumlah[a];
			}
			else if (strcmp(menu->namapesanan[a],"Mie Goreng")==0)
			{
				Queue->penghasilan = Queue->penghasilan + 8000*menu->jumlah[a];
			}
			else if (strcmp(menu->namapesanan[a],"Gado-Gado")==0)
			{
				Queue->penghasilan = Queue->penghasilan + 10000*menu->jumlah[a];
			}
			else if (strcmp(menu->namapesanan[a],"Es Teh")==0)
			{
				Queue->penghasilan = Queue->penghasilan + 5000*menu->jumlah[a];
			}
			else if (strcmp(menu->namapesanan[a],"Kopi")==0)
			{
				Queue->penghasilan = Queue->penghasilan + 7000*menu->jumlah[a];
			}
			else
			{
				printf("Pesanan Tidak Ada");
				goto pesan;
			}
			a++;
			fflush(stdin);
			
			if(a==10)
			{
				printf("pesanan anda penuh");
				break;
			}
			l:
			printf("Tambah Pesanan ? y/n : ");
			scanf("%c",&pilih);
			if (pilih != 'y' && pilih != 'n'){
				printf("Pilihan salah!");
				getch();
				goto l;
			}
		}
	 		menu->next=NULL;
			menu->prev=NULL;

  			if(Queue->front==NULL)
   			 {
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

void dequeue(queue *Queue)
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
		Queue->headtemp->nextll = NULL;	
		temp->next = Queue->headtemp;
		Queue->circularcount++;
		Queue->count--;
		Queue->mejameja++;
		
		printf("\n ANTRIAN SUDAH DILAYANI");
	}
	
	else if (Queue->circularcount == 0)
	{
		Queue->circularhead = temp;//memberi head pada circular
		Queue->circularhead->next = temp;
		Queue->headtemp = Queue->circularhead;
		Queue->circularcount++;
		Queue->count--;
		Queue->mejameja++;
		
		printf("\n ANTRIAN SUDAH DILAYANI");
	}
	else
	{
		temp->next = Queue->headtemp->next;
		Queue->headtemp->next = temp;
		Queue->circularcount++;
		Queue->count--;
		
		printf("\n ANTRIAN SUDAH DILAYANI");
	}
	
	
	
	getch();
	
	
}

void viewData(queue *Queue,int count[100]){
	queue *temp = Queue->front;
	queue *temp1;
	int t=0;

     		system ("cls");
			printf("-------------------------------------\n");
			printf("---------- DATA PELANGGAN -----------\n");
			printf("-------------------------------------\n\n");

			if (temp == NULL){
				printf("\n\t>>> DATA YANG TELAH DIHAPUS <<<\n");
			}
			else
			{
				while(temp)
	  			{
	  				printf("\n");
			  		printf("NO ANTRIAN\t :  %i\n",temp->noantri);
		 			printf("NO MEJA\t\t :  %i\n",temp->nomeja);
		 			printf("NAMA PEMESAN\t :  %s\n",temp->namapemesan);

		 			for (int c=0;c<count[t+(Queue->circularcount)];c++)
					{
		 				printf("- NAMA PESANAN\t :  %s\n",temp->namapesanan[c]);
		 				printf("- JUMLAH\t :  %i\n",temp->jumlah[c]);
		 			}
					t++;
					temp = temp->next;
				}
			}
	temp1 = Queue->circularhead;	
	int jumlahpesanan[100];	
	
	
			if (temp1 == NULL){
				printf("\n\t>>> DATA ANTRIAN BESERTA PESANAN <<<\n");
			}
			else
			{ t=0;
			int y=0;
			int a=0;
			int meja[100];
			meja[0]=0;
			jumlahpesanan[0]=0;
			for (int b=1;b<=Queue->mejameja;b++)
			{
				printf("\n meja %i\n",b);
				meja[t]=b;
				while ( a<Queue->circularcount )
	  			{
	  				printf("\n");
			  		printf("NO ANTRIAN\t :  %i\n",temp1->noantri);
			  		printf("Nama Pemesan :  %s\n",temp1->namapemesan);
					jumlahpesanan[t]=jumlahpesanan[t]+count[y];
					printf("\n%i\n",y);
					temp1 = temp1->next;
					
					a++;
					y++;
					if (a%5==0)
					{
						break;
		
					}
					
				}
				printf ("jumlah macam pesanan pada meja %i adalah %i",meja[t],jumlahpesanan[t]);
				temp1 = temp1->nextll;
				t++;
			}
		}
		
			getch();
}


void total (queue *Queue)
{	
	system("cls");
	printf("Total Penghasilan : %i",Queue->penghasilan);
	getch();
}



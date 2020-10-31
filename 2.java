public class Main
{
	public static void main(String[] args) {
		cetak_gambar();
	}
	
	static void cetak_gambar(){
    String[] arrBendera = {"D","U","M","B","W","A","Y","S","I","D"};
		
		for(int i=0; i<arrBendera.length; i++)
		{
		    int kebalikan = (arrBendera.length-1)-i;
		    for(int j=0; j<arrBendera.length; j++)
		    {
		        
		        if(j == i || j == kebalikan)
		        {
		          System.out.print(" "+arrBendera[i]+" ");  
		        }
		        else
		        {
		            System.out.print(" = ");
		        }
		    }
		    System.out.println();
		}
}
}

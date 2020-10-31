public class Main
{
    static boolean cekAngka = false;
    
	public static void main(String[] args) {
		String[] urutAngkaArr = urut("ta3hun menjela2ng se1lamat b4aru");
		
		if(cekAngka)
		{
		    System.out.print("Angka tidak boleh lebih dari 9 atau sama dengan 0");
		}
		else{
		for(int j=0; j<urutAngkaArr.length; j++)
		{
		    if(urutAngkaArr[j] != null){
		    System.out.print(urutAngkaArr[j]+" ");
		    }
		};
		}
	}
	
	static String[] urut(String kalimat){
        String[] kalmimatArr = kalimat.split(" ");
		String[] urutArr = new String[9]; 
		
		for(int k=0; k<kalmimatArr.length; k++){
		    
		    char[] charArr = kalmimatArr[k].toCharArray();
		    
    		for(int i=0; i<charArr.length; i++){
                if(Character.isDigit(charArr[i]) == true)
                {
                    if(Character.getNumericValue(charArr[i]) > 9 || Character.getNumericValue(charArr[i]) == 0)
                    {
                        cekAngka = true;
                    }
                    else{
                    urutArr[(Character.getNumericValue(charArr[i])-1)] = kalmimatArr[k];
                    }
                }
    		}
		}
		return urutArr;
    }
}

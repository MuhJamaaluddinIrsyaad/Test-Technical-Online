
public class Main
{
  
    public static void main(String args[]) 
    { 
    String[] dataKey = {"dumb","ways","the","best"};
    String word = "dumbways";
      check(dataKey,word);
    } 
    
    static void check(String[] dataKey, String word){
        for(int i=0; i<dataKey.length; i++)
        {
        System.out.println(dataKey[i]+" => "+word.contains(dataKey[i]));
        }
    }
}

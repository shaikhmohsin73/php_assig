<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if (($column == 4 and $row != 6) or ($row == 0 and $column > 2 and $column < 6) or ($row == 6 and $column == 3) or ($row == 5 and $column == 2))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
?>
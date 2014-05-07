var OriginalMessageLength = 0;

var OriginalMessage;



function Convert()

{

	//testing out the textarea tag

	var Message = document.SHA.Message.value;

	var y = Message.length;

	var i = 0;

	var temp ;

	var j = 0;

	var k = 0;



	OriginalMessage = Message;	

    document.SHA.Converted.value = "";	



	for(x = 0; x < y ; x++)

	{

		i = Message.charCodeAt(x);

		temp = i.toString(2);



		if(temp.length < 8)

		{

			k = temp.length;

			for(j = 8; j > k ; j--)

			{

				temp = "0" + temp;

			}

		}

		

		document.SHA.Converted.value += temp;		

		document.SHA.Converted.value += " ";

	}

	OriginalMessageLength = y;

	

}



function Pad()

{



	document.SHA.MessageLength.value = OriginalMessageLength * 8;

  	document.SHA.MessageLength2.value = OriginalMessageLength * 8;

    var x = (OriginalMessageLength * 8) % 512;

    var y = (OriginalMessageLength * 8);

	var a = y.toString(2);

	var w = a.length ;

 

    while( w < 64)

    {

        a = "0" + a;

        ++w;

    }

 

 

    if(x < 448)

    {

        x = 448 - x;

 

    }

    if(x > 448)

    {

        x =  512 - (x - 448)

    }

    if(x == 448)

    {

        x = x + 512;

    }

	document.SHA.PaddedBits.value = x;

	document.SHA.ModResult.value = (y + x) % 512;

	document.SHA.MessageLength3.value = (OriginalMessageLength * 8) + x;

	document.SHA.PadValue.value = x - 1;

	document.SHA.PadMessageLength.value = a;

	

	var b = x/8;

	

	document.SHA.PaddedMessage.value = document.SHA.Converted.value;

	document.SHA.PaddedMessage.value += "10000000 ";

	

	for(b = (x / 8) -1; b > 0; --b)

	{

		document.SHA.PaddedMessage.value += "00000000 ";

	} 

	

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(0,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(8,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(16,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(24,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(32,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(40,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(48,8) + " ";

	document.SHA.PaddedMessage.value += document.SHA.PadMessageLength.value.substr(56,8) + " ";





}





function ShowFinalMessage()

{

	//document.SHA.FinalMessage.value = OriginalMessage;

    document.SHA.FinalMessage.value += "\n\n                HASH CODE INSERTED HERE";  

}

class TypingEffect{
	constructor(text = "lorem ipsium dummy text",DOM_ID,textSpeed = 400 ,index = 0){


		this.text=text;
		this.textSpeed=textSpeed;
		this.index=index;
		this.DOM_ID=DOM_ID;
		this.textElapsed=false;

		this.removeText=()=>{
			
			this.DOM_ID.innerHTML = " ";
		}

		this.updateText=()=>{

			if(this.index < this.text.length){

				this.DOM_ID.innerHTML += this.text.charAt(this.index);
				
				this.index++;

				setTimeout(this.updateText,this.textSpeed);
			}

			if(this.index == this.text.length){
				this.removeText();
				this.index=0;
				this.textElapsed=true;
			}
		}
	}
}


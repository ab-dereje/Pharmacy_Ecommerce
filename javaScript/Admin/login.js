
        const user='Admin';
        const pass='admin';
        const form=document.getElementById('form');
        const passinput=document.getElementById('pass');
        const passerror=document.getElementById('perror');
        const userinput=document.getElementById('user');
        
        form.addEventListener('submit',(e) => {
            let messages=[]
            if(passinput.value !== pass){
                    messages.push('Incorrect password')
                }
            if(userinput.value !== user ){
                messages.push('Incorrect user name')

            }

            if(messages.length > 0){
                e.preventDefault()
                passerror.innerText=messages
                passerror.style.color='red'
                passerror.style.fontWeight='50'
                passerror.style.fontSize='15px'
                
            }

        });


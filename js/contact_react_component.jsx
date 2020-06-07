class ContactComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            name:'',
            email:'',
            mobile:'',
            subject:'',
            message:'',
            error:'',
            formDisabled:false,
            success:false,
            sendButton : 'Send Message'
        }
    }
    handleReset = () =>{
        this.setState({
            name:'',
            email:'',
            mobile:'',
            subject:'',
            message:'',
            formDisabled:false,
            sendButton : 'Send Message'
        })
    }
    handleChange = (evt) =>{
        this.setState({ [evt.target.name]: evt.target.value.trim(),
                        error:'',
                        success:false
        });
    }
    handleSubmit = (e) =>{
        e.preventDefault();
        var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
        var mobilefilter=/^\d{10}$/;;
        if(!this.state.name.trim() || !this.state.email.trim() || !this.state.mobile|| !this.state.subject.trim() || !this.state.message.trim()){
            return(
                this.setState({
                    error: 'Empty Inputs, Please Fill Out Details',
                    success:false
                })
            )
        }
        if(!this.state.error &&  this.state.email ){
            if(emailfilter.test(this.state.email) == false){
                return(
                    this.setState({ error: 'Invalid Email'})
                    )
            }
        }

        if(!this.state.error &&  this.state.mobile ){
            if(!(this.state.mobile.match(mobilefilter))){
                return( this.setState({ error : 'Enter a Valid #Mobile Number'}));
            }
        }
        
        
        if(this.state.name && this.state.email && this.state.mobile && this.state.subject && this.state.message){
            this.setState({
                sendButton:'Sending Message',
                formDisabled:true
            })
            var dataString = 'name='+this.state.name+ '&email= '+this.state.email+'&mobile='+this.state.mobile+
                         '&subject='+this.state.subject+'&message='+this.state.message;
            $.ajax({
                type: "POST",
                url: "contactform/contactform.php",
                data: dataString,
                success: function(html) {
                    //alert(html);
                  if (html == 'OK') {
                    this.setState({success:true,
                                   error:''
                                })
                    this.handleReset()
                  } else {
                    this.setState({error:'Something went Wrong',
                                  success:false
                                })
                    this.handleReset()
                  }
          
                }.bind(this),
            });
        }
                         
        
    }
    render() {
    return (
        <div className="form">
            {this.state.success?<div id="sendmessage" className="show">Your message has been sent. Thank you!</div> :null}
            {this.state.error ?<div id="errormessage" className="show">{this.state.error}</div> :null}
            <form action="" method="post" role="form" className="contactForm">
                <div className="form-row">
                    <div className="form-group col-md-4">
                        <input 
                            value={this.state.name} 
                            onChange={this.handleChange} 
                            type="text" 
                            name="name" 
                            className={this.state.formDisabled ? 'form-control sendingText' : 'form-control'}
                            id="name" 
                            placeholder="Your Name" 
                            required 
                        />
                    </div>
                    <div className="form-group col-md-4">
                        <input 
                            value={this.state.email} 
                            onChange={this.handleChange} 
                            type="email" 
                            className={this.state.formDisabled ? 'form-control sendingText' : 'form-control'}
                            name="email" 
                            id="email" 
                            placeholder="Your Email" 
                            required 
                        />
                    </div>
                    <div className="form-group col-md-4">
                        <input 
                            value={this.state.mobile} 
                            onChange={this.handleChange} 
                            type="text" 
                            className={this.state.formDisabled ? 'form-control sendingText' : 'form-control'}
                            name="mobile" 
                            id="mobile" 
                            placeholder="Your 10 digit mobile number" 
                            required
                        />
                    </div>
                </div>
                <div className="form-group">
                    <input 
                        value={this.state.subject} 
                        onChange={this.handleChange} 
                        type="text" 
                        className={this.state.formDisabled ? 'form-control sendingText' : 'form-control'}
                        name="subject" 
                        id="subject" 
                        placeholder="Subject" 
                        required
                    />
                </div>
                <div className="form-group">
                    <textarea 
                        value={this.state.message} 
                        onChange={this.handleChange} 
                        className={this.state.formDisabled ? 'form-control sendingText' : 'form-control'}
                        name="message" 
                        rows="5" 
                        placeholder="Message" 
                        required
                    >
                    </textarea>
                </div>
                <div className="text-center"><button className="btn-block" onClick={this.handleSubmit} type="submit">{this.state.sendButton}</button></div>
            </form>
        </div>
    );
    }
}

ReactDOM.render(
    <ContactComponent />,
    document.getElementById('contact_component')
);

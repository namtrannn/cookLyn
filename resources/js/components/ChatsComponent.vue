<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-defalut">
                <div class="card-header" style="background: #00c6fb">
                    <strong style="font-size:18px">Hỗ trợ nấu ăn tương tác</strong>
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyle" style="height:300px; overflow-y:scroll; font-size: 14px" v-chat-scroll>
                        <li class="p-2" v-for="(message,index) in messages" :key="index">
<!--                            <span v-if="message.user">-->
<!--                            <strong v-if="message.user.name">{{ message.user.name}}</strong>-->
<!--                            </span>:-->
<!--                            {{message.message}}-->
                            <p v-if="activeUser.role == 3"><strong style="color: red;">{{message.user.name}}</strong> :</p>
                            <strong>{{message.user.name}}</strong> :
                            {{message.message}} <br>
                            <span class="pull-right">{{message.created_at}}</span>
                            <hr>
                        </li>
                    </ul>
                </div>
                <input
                        @keydown="sendTypingEvent"
                        @keyup.enter="sendMessage"
                        v-model="newMessage"
                        type="text"
                        name="message"
                        placeholder="Nhập ..."
                        class="form-control"
                        style="height:45px">
            </div>
            <span class="text-muted p-0" v-if="activeUser">{{activeUser.name}} đang nhập...</span>
            <button v-on:click="sendMessage" style="width: 80px" type="button" class="btn btn-success">Gửi đi</button>
        </div>
        <div class="col-md-4">
            <div class="card card-defalut">
                <div class="card-header" style="background: #00c6fb">
                    Hoạt động
                </div>
                <div class="card-body" style="height: 350px; background:#ecf0f1">
                    <ul style="font-size: 16px">
                        <li style="border: 1px solid #ecf0f1" class="py-2" v-for="(user,index) in users" :key="index">
                           {{user.name}} -
                            <span style="color: #ff7979" v-if="user.role===3">Chuyên gia</span>
                            <span v-else>Thành viên</span><br>
                            <hr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['user'],

        data(){
            return{
                messages: [],
                newMessage: '',
                users: [],
                activeUser:false,
                typingTimer:false,
            }
        },
        created(){
            this.fetchMessages();

            Echo.join('chat')
                .here(user=>{
                    this.users = user;
                })
                .joining(user =>{
                    this.users.push(user);
                })
                .leaving(user=>{
                    this.users= this.users.filter(u=>u.id != user.id);
                })
                .listen('MessageEvent', (event) => {
                    this.messages.push(event.message);
                    // console.log("Nội dung");
                    // console.log(this.messages);
                })
                .listenForWhisper('typing', user => {
                    this.activeUser = user;

                    if(this.typingTimer){
                        clearTimeout(this.typingTimer);
                    }
                    this.typingTimer = setTimeout(()=>{
                        this.activeUser = false
                    },3000);
                })
        },
        methods: {
            fetchMessages(){
                axios.get('messages').then(response => {
                    this.messages = response.data;
                    // console.log("Nội dung")
                     //console.log(this.messages)
                });
            },

            sendMessage(){
                this.messages.push({
                    user: this.user,
                    message:this.newMessage
                });

                axios.post('messages',{message: this.newMessage});
                this.newMessage="";
            },

            sendTypingEvent(){
                Echo.join('chat')
                    .whisper('typing', this.user);
            }
        }
    }
</script>

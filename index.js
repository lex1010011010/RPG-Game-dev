process.env.NTBA_FIX_319 = 1;
const TelegramBot = require('node-telegram-bot-api')
const debug = require('./helpers')
const TOKEN = '1227139831:AAE9fxNCuGfm15J_HIgqAUaggKDFx9ou220'

const bot = new TelegramBot(TOKEN, {
    polling: {
        interval: 300,
        autoStatus: true,
        params: {
            timeout: 10
        }
    }
})


const actions = {
    firstQuestions: {
        1: 'Go forward',
        2: 'Go right',
        3: 'Go left',
        4: 'Go back'
    }
}
const questions = {
    1: 'Привет путник. Ты пришел хуй знает от куда....',
    2: 'Перед тобой тропинка.',
    3: 'По дороге ты увидел кое что интересное и захотел взять это с собой.',
    4: 'Ты долго брел по тропинке. Она вывела тебя на поляну. На поляне стоит дом.'
}

// console.log(questions[1]);

const ans = []

bot.onText(/\/start/, (msg) => {
    const { id } = msg.chat
    const { first_name } = msg.chat
    bot.sendMessage(id, `Привет ${first_name}, начинается новая игра`)
        .then(() => {
            console.log('Greeting send to: ' + first_name)
        })
    setTimeout(() => {
        bot.sendMessage(id, questions[1], {
            reply_markup: {
                keyboard: [
                    [actions.firstQuestions[1]],
                    [actions.firstQuestions[2]],
                    [actions.firstQuestions[3]],
                    [actions.firstQuestions[3]]
                ],
                one_time_keyboard: true
            }
        })
    }, 4000);
})

bot.on('message', (msg) => {
    // bot.sendMessage(msg.chat.id, questions[1])
    ans.push(msg.text)
    console.log(ans)
})

console.log('hellofds')
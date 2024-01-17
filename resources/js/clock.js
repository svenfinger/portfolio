import moment from 'moment';

export default function clock(){
  return {
    time: new Date(),
    init() {
      setInterval(() => {
        this.time = new Date()
      }, 1000)
    },
    getTime() {
      return moment(this.time).format('HH:mm')
    }
  }
}

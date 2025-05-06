export const useCounterStore = defineStore("counter", () => {
    const dash1 = ref(true);
    const dash2 = ref(false);
    const dash3 = ref(false);
    const dash4 = ref(false);
    const option1 = ref(true);
    const option2 = ref(false);
    const option3 = ref(false);
    const option4 = ref(false);
    const connect = ref(true);
    const connect2 = ref(true);
    const connect3 = ref(false);
  
    function changedash1() {
      dash1.value = !dash1.value;
    }
    function changedash2() {
      dash2.value = !dash2.value;
    }
    function changedash3() {
      dash3.value = !dash3.value;
    }
    function changedash4() {
      dash4.value = !dash4.value;
    }
    function changeoption1() {
      option1.value = !option1.value;
    }
    function changeoption2() {
      option2.value = !option2.value;
    }
    function changeoption3() {
      option3.value = !option3.value;
    }
    function changeoption4() {
      option4.value = !option4.value;
    }
  
    return {
      dash1,
      dash2,
      dash3,
      dash4,
      option1,
      option2,
      option3,
      option4,
      connect,
      connect2,
      connect3,
      changedash1,
      changedash2,
      changedash3,
      changedash4,
      changeoption1,
      changeoption2,
      changeoption3,
      changeoption4,
    };
  });
  
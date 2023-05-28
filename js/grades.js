const btnChoseGrade = document.querySelector('#btn-choose-grade')
const grades = document.querySelector('#grades')
let active = false

btnChoseGrade.addEventListener('click', () => {
  active = !active

  if (active) {
    btnChoseGrade.classList.add('bg-red-500', 'hover:bg-red-600')
    btnChoseGrade.textContent = 'Cerrar'

    grades.classList.remove('hidden')
  }
  else {
    btnChoseGrade.classList.remove('bg-red-500', 'hover:bg-red-600')
    btnChoseGrade.textContent = 'Crear una nueva matricula'
    
    grades.classList.add('hidden')
  }
})
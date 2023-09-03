const calculateSum = (coll) => {
  let sum = 0
  for (const value of coll) {
    sum += value
  }

  return sum
}
console.log(calculateSum(coll))

"use client"

import { useState } from "react"
import { useRouter } from "next/navigation"

import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar"
import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"

type patients = {
  name: string
  age: number
  bloodGroup: string
}

function Page() {
  const [paitent, setPaitentType] = useState<patients[]>([])
  const [name, setName] = useState("")
  const [age, setAge] = useState<number>(0)
  const [bloodGroup, setBloodGroup] = useState("")

  const router = useRouter()
  const addPatient = (newPatient: patients) => {
    // we are pusing an element into the array
    setPaitentType([...paitent, newPatient])
  }

  return (
    <div className="mx-auto p-8 flex flex-row justify-between w-5/6">
      <Card className="border-0">
        <CardHeader className="space-y-1">
          <CardTitle className="text-2xl text-center">Add paitent</CardTitle>
          <CardDescription className="text-center">
            Add paitent to serial
          </CardDescription>
        </CardHeader>
        <CardContent className="grid gap-4">
          <div className="grid gap-2">
            <Label htmlFor="email">Paitent Name</Label>
            <Input
              id="name"
              type="text"
              placeholder="hasan"
              value={name}
              onChange={(e) => setName(e.target.value)}
            />
          </div>
          <div className="grid gap-2">
            <Label htmlFor="password">Age</Label>
            <Input
              id="age"
              type="number"
              placeholder="18"
              value={age}
              onChange={(e) => setAge(Number(e.target.value))}
            />
          </div>
          <div className="grid gap-2">
            <Label htmlFor="password">Blood Group</Label>
            <Input
              id="bloodGroup"
              type="text"
              placeholder="A positive"
              value={bloodGroup}
              onChange={(e) => setBloodGroup(e.target.value)}
            />
          </div>
          <div className="flex items-start gap-4">
            <Button onClick={() => addPatient({ name, age, bloodGroup })}>
              Add patient
            </Button>
          </div>
        </CardContent>
      </Card>
      <Card>
        <CardHeader>
          <CardTitle>Paitent Viewer</CardTitle>
        </CardHeader>
        <CardContent className="grid gap-6">
          {paitent.map((patient, index) => (
            <div className="flex items-center justify-between space-x-4">
              <div className="flex items-center space-x-4">
                <Avatar>
                  <AvatarImage src="/avatars/01.png" />
                  <AvatarFallback>OM</AvatarFallback>
                </Avatar>
                <div>
                  <p className="text-sm font-medium leading-none">
                    {patient.name}
                  </p>
                </div>
              </div>
              <div>
                <div className="flex items-start gap-4">
                  <Button onClick={() => router.push("/medhistory")}>
                    Begin Treatment
                  </Button>
                </div>
              </div>
            </div>
          ))}
        </CardContent>
      </Card>
    </div>
  )
}

export default Page